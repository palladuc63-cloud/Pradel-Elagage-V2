import { defineConfig } from 'astro/config';
import sitemap from '@astrojs/sitemap';

// Mode statique : génère des fichiers HTML/CSS/JS légers,
// compatibles avec un hébergement mutualisé O2switch (Apache).
export default defineConfig({
  output: 'static',
  site: 'https://pradel-elagage.fr',

  integrations: [
    sitemap({
      filter: (page) => !page.includes('/404'),
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
