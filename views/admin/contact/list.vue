
<template>
    <table-render title="Mail Contact" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-render>
</template>

<script>

export default {
    data () {
        return {
            path_param: ["mail", "contact"],
            model: {
                id: "",
                name: "",
                email: "",
                ordering: "",
                published: "",
            },
            search_fields: [
                { type: "text", name: "name", label: "Name", ope: "", },
                { type: "text", name: "email", label: "Email", ope: "", },
                { type: "text", name: "ordering", label: "Ordering", ope: "", },
                { type: "text", name: "published", label: "Published", ope: "", },
            ],
            table_fields: [
                { text: "Name", prop: "name", name: "name", },
                { text: "Email", prop: "email", name: "email", },
                { text: "Ordering", prop: "ordering", name: "ordering", },
                { text: "Published", prop: "published", name: "published", },
            ],
        };
    }
};
</script>
