import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";

import SidebarNavigation from "@/Components/SidebarNavigation.vue";
import NavigationItem from "@/Components/NavigationItem.vue";
import NavigationItemChild from "@/Components/NavigationItemChild.vue";

import { createApp } from "vue";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": false,
        "progress_bar": true,
        "components": {
            SidebarNavigation,
            NavigationItem,
            NavigationItemChild

        },
    })
    .mount(el);
