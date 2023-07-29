<template>
    <slot name="default" :handleFormSubmit="handleFormSubmit" :data="data" :loading="loading"/>

    <!--    <div v-if="loading" class="flex justify-center items-center border-red-500 pb-3 mt-3">-->
    <!--        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">-->
    <!--            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>-->
    <!--            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>-->
    <!--        </svg>-->
    <!--    </div>-->

    <slot name="shimmer" v-if="loading"/>

    <Trigger @triggerIntersected="loadMore"/>

</template>

<script setup>
import {ref, reactive, onMounted, nextTick} from "vue";
import {debounce, isEmpty} from "lodash";
import Trigger from "./Trigger.vue";

const props = defineProps(['url']);
const data = ref({});
const query = reactive({});
const loading = ref(false);
const nextPage = ref(null);
let el = ref(null);

async function handleFormSubmit(query) {
    await nextTick();
    data.value = [];
    console.log(query.value);
    query.value = query;
    makeFetch(query.value);
}

function loadMore() {
    if (nextPage.value) {
        loading.value = true;
        window.axios.get(data.value?.links.next, {params: getCurrentQuery()}).then(response => {
            if (nextPage.value && response.data) {
                data.value = {
                    ...response.data, data: [...data?.value?.data, ...response?.data?.data]
                };
                nextPage.value = response?.data?.links.next;

            }
            loading.value = false;
        }).catch(err => {
            loading.value = false;
        })
    }
}

onMounted(() => {
    makeFetch(getCurrentQuery());
});

function makeFetch(params = {}) {
    let searchQueryObj = handleParams(params);

    loading.value = true;
    window.axios.get(props.url, {params: searchQueryObj}).then(response => {
        nextPage.value = response?.data.links.next;
        data.value = response.data;
        loading.value = false;
    }).catch(err => loading.value = false);
}

function convertProxyObjectToPojo(proxyObj) {
    return _.cloneDeep(proxyObj);
}

function removeEmpty(obj) {
    delete obj.value;
    return Object.fromEntries(Object.entries(obj).filter(([_, v]) => v != null));
}

function convertSearchQueryToObject(queryString) {
    return Object.fromEntries(new URLSearchParams('?' + queryString));
}

function urlWithoutQuery() {
    return window.location.href.split('?')[0];
}

function handleParams(params = {}) {
    let searchQueryObj = null;
    if (!isEmpty(params)) {
        params = removeEmpty(convertProxyObjectToPojo(params));
        const js = JSON.stringify(params);
        const re = /"(\w+)":[^\{]?"?(\w+)"?/g
        const usp = new URLSearchParams();
        console.log(js.match(re));
        if (js.match(re)) {
            js.match(re).forEach(str => {
                const [key, val] = str.split(":");
                usp.set(key.replace(/"/g, ""), val.replace(/"/g, ""))
            })
        }


        history.pushState({}, '', urlWithoutQuery() + '?' + usp.toString());
        searchQueryObj = convertSearchQueryToObject(usp.toString());
    }
    return searchQueryObj;
}

function getCurrentQuery() {
    let search = location.search.substring(1);
    if (search) {
        return JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g, '":"') +
            '"}')
    }
    return null;
}
</script>

<style>

.loader {
    -webkit-animation: spinner 1.5s linear infinite;
    animation: spinner 1.5s linear infinite;
}


@-webkit-keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
    }
}

@keyframes spinner {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

</style>
