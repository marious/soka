<template>
    <tr class="border-b border-slate-800 shimmer"
        v-for="(item, indx) in count" :key="indx">
        <td class="py-4">
            <div class="flex">
                <span class="h-12 w-12 rounded-full ml-1 mr-3 bg-gray-600 animate-pulse border-gray-600 inline-block">
                </span>
                <div class="truncate">

                    <div class="flex">
                        <div class="w-6 h-6 mr-2">

                        </div>
                        <div class="absolute w-6 text-[9px] text-center mt-1"><span></span></div>
                        <p
                            class="text-xs text-cyan-600 flex items-center pt-1 w-20 h-3 bg-gray-600 animate-pulse">
                            <span></span></p>
                    </div>
                </div>
            </div>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
        <td class="text-center">
            <span class="w-20 h-3 bg-gray-600 inline-block animate-pulse"></span>
        </td>
    </tr>
</template>
<style scoped>
.shimmer::before {
    transform: translateX(-100%);
    animation: shimmer 1.4s infinite;
}

@keyframes shimmer {
    100% {
        transform: translateX(100%);
    }
}
</style>
<script setup>
const props = defineProps({
    count: {
        type: Number,
        default: 1,
    },
});
</script>

