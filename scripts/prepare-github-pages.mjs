import { readdir, readFile, writeFile } from 'node:fs/promises';
import { extname, join } from 'node:path';
import { fileURLToPath } from 'node:url';

const dist = fileURLToPath(new URL('../dist/', import.meta.url));
const base = '/Pradel-Elagage-V2';
const textExtensions = new Set(['.html', '.css', '.js', '.xml', '.svg']);
const localRoots = '(?:img|svg|fonts|favicon(?:1)?\\.ico|contact|mentions-legales|elagage-thiers-forez|bois-de-chauffage-thiers|travaux-tp|_astro)';
const localPathPattern = new RegExp(`(["'\\(])\\/(?=${localRoots}(?:\\/|["']))`, 'g');

async function rewriteDirectory(directory) {
  for (const entry of await readdir(directory, { withFileTypes: true })) {
    const path = join(directory, entry.name);
    if (entry.isDirectory()) {
      await rewriteDirectory(path);
      continue;
    }
    if (!textExtensions.has(extname(entry.name))) continue;

    const source = await readFile(path, 'utf8');
    const rewritten = source
      .replace(localPathPattern, `$1${base}/`)
      .replaceAll('href="/"', `href="${base}/"`)
      .replaceAll("href='/'", `href='${base}/'`);
    if (rewritten !== source) await writeFile(path, rewritten);
  }
}

await rewriteDirectory(dist);
await writeFile(join(dist, 'robots.txt'), 'User-agent: *\nDisallow: /\n');
console.log(`GitHub Pages assets and links prepared for ${base}/`);
