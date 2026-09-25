// @ts-check
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';

// https://astro.build/config
export default defineConfig({
  site: 'https://ddlandworks.com',
  redirects: {
    '/services/land-clearing': '/land-clearing-services-eugene-oregon',
    '/services/grading-leveling': '/land-grading-services-eugene-oregon',
  },
  vite: {
    plugins: [tailwindcss()],
  },
});
