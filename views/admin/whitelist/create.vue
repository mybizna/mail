<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["mail", "whitelist", "form.vue"])
    },
};
</script>
