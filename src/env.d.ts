/// <reference path="../.astro/types.d.ts" />

interface ImportMetaEnv {
  readonly PUBLIC_MAPTILER_API_KEY?: string;
  readonly PUBLIC_MAPTILER_MAP_ID?: string;
  readonly PUBLIC_FORMSPREE_ID?: string;
}

interface ImportMeta {
  readonly env: ImportMetaEnv;
}
