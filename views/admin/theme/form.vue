<template>
    <edit-render :path_param="path_param" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.title" label="Title" id="title" type="text" validation="required" />
                <FormKit v-model="model.file_name" label="File Name" id="file_name" type="text" validation="required" />
                <FormKit v-model="model.is_file" label="Is File" id="is_file" type="text" validation="required" />
                <FormKit v-model="model.is_default" label="Is Default" id="is_default" type="text" validation="required" />
            </div>
            <div class="col-md-6">
                <FormKit v-model="model.body" label="Body" id="body" type="editor" validation="required" />
            </div>
        </div>

    </edit-render>
</template>

<script>
export default {
   
    data () {
        return {
            id: null,
            path_param: ["mail", "theme"],
            model: {
                id: "",
                title: "",
                file_name: "",
                body: "",
                is_file: "",
                is_default: "",
            },
           
        };

    }
};
</script>
