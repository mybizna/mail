<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["mail", "blacklist", "form.vue"])
    },
};
</script>
