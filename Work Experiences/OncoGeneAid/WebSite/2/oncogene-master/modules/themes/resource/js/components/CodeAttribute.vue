<template>
    <div>
        <quill-editor
            label="کد html"
            outlined
            v-model="$store.state.widget.tagData.code[$store.state.widget.styleId].content"
            dense
            style="margin-left: 15px;margin-right:15px;height: 500px"
        ></quill-editor>

    </div>
</template>

<script>
import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import 'quill/dist/quill.bubble.css'

import {quillEditor} from 'vue-quill-editor'

export default {
    name: "CodeAttribute",
    components: {
        quillEditor
    }
}
</script>

<style scoped>

</style>
