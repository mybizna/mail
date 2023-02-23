
<template>
    <table-render title="Mail Theme" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-render>
</template>

<script>

export default {
    data () {
        return {
            path_param: ["mail", "theme"],
            model: {
                id: "",
                title: "",
                file_name: "",
                body: "",
                is_file: "",
                is_default: "",
            },
            search_fields: [
                { type: "text", name: "title", label: "Title", ope: "", },
                { type: "text", name: "file_name", label: "File Name", ope: "", },
                { type: "text", name: "is_file", label: "Is File", ope: "", },
                { type: "text", name: "is_default", label: "Is Default", ope: "", },
            ],
            table_fields: [
                { text: "Title", prop: "title", name: "title", },
                { text: "File Name", prop: "file_name", name: "file_name", },
                { text: "Is File", prop: "is_file", name: "is_file", },
                { text: "Is Default", prop: "is_default", name: "is_default", },
            ],
        };
    }
};
</script>
