// @ts-check
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';

// https://astro.build/config
export default defineConfig({
  site: 'https://ddlandworks.com',
  redirects: {
    '/services/utility-excavation': '/utility-trenching-eugene-oregon',
    '/services/brush-clearing': '/brush-clearing-eugene-oregon',
    '/services/site-preparation': '/site-preparation-contractor-eugene-oregon',
    '/services/slope-stabilization': '/slope-stabilization-eugene-oregon',
  },
  vite: {
    plugins: [tailwindcss()],
  },
});
