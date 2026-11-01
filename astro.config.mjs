import { defineConfig } from 'astro/config';
import sitemap from '@astrojs/sitemap';

// Mode statique : génère des fichiers HTML/CSS/JS légers,
// compatibles avec un hébergement mutualisé O2switch (Apache).
const isGitHubPages = process.env.GITHUB_PAGES === 'true';

export default defineConfig({
  output: 'static',
  site: isGitHubPages ? 'https://palladuc63-cloud.github.io' : 'https://pradel-elagage.fr',
  base: isGitHubPages ? '/Pradel-Elagage-V2' : '/',

  integrations: [
    sitemap({
      filter: (page) => !page.includes('/404') && !page.includes('/mentions-legales'),
    }),
  ],

  devToolbar: {
    enabled: true,
  },

  server: {
    port: 4321,
    strictPort: true,
    host: true,
  },
});
