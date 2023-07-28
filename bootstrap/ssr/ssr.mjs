import { createServer } from "http";
import { A as Ap, v as vueExports, x as xp, I as Ip } from "./assets/protone-media-laravel-splade-5fedba8f.mjs";
import { renderToString } from "@vue/server-renderer";
import "axios";
import "@vue/compiler-dom";
import "@vue/runtime-dom";
import "@vue/shared";
Ap(createServer, renderToString, (props) => {
  return vueExports.createSSRApp({
    render: xp(props)
  }).use(Ip);
});
