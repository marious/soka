import { createServer } from "http";
import { w as wp, v as vueExports, g as gp, b as bp } from "./assets/protone-media-laravel-splade-a4cfbbb4.mjs";
import { renderToString } from "@vue/server-renderer";
import "axios";
import "@vue/compiler-dom";
import "@vue/runtime-dom";
import "@vue/shared";
wp(createServer, renderToString, (props) => {
  return vueExports.createSSRApp({
    render: gp(props)
  }).use(bp);
});
