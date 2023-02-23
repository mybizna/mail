
<template>
    <table-render title="Mail Contact" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-render>
</template>

<script>

export default {
    data () {
        return {
            path_param: ["mail", "signature"],
            model: {
                id: "",
                title: "",
                signature: "",
                ordering: "",
                published: "",
            },
            search_fields: [
                { type: "text", name: "title", label: "Title", ope: "", },
                { type: "text", name: "signature", label: "Signature", ope: "", },
                { type: "text", name: "ordering", label: "Ordering", ope: "", },
                { type: "text", name: "published", label: "Published", ope: "", },
            ],
            table_fields: [
                { text: "Title", prop: "title", name: "title", },
                { text: "Signature", prop: "signature", name: "signature", },
                { text: "Ordering", prop: "ordering", name: "ordering", },
                { text: "Published", prop: "published", name: "published", },
            ],
        };
    }
};
</script>
