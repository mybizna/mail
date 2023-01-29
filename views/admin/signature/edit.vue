<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["mail", "signature", "form.vue"])
    },
};
</script>
