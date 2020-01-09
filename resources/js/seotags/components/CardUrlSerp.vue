<template>
    <div>
        <div class="pb-2 table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="width-tag" v-if="pantallaGrande">Etiqueta</th>
                        <th v-if="pantallaGrande">Contenido</th>
                        <th v-if="!pantallaGrande">Etiquetas de la URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr :class="{'bg-gris':key % 2}" v-for="(tag,key) in tags" :key="key">
                        <td class="width-tag" v-if="pantallaGrande">{{tagName(tag)}}</td>
                        <td>
                            <div v-if="!pantallaGrande" class="bold">{{tagName(tag)}}</div>
                            <div v-if="!Array.isArray(dato.data[tag])">
                                {{dato.data[tag] || 'No tiene h1'}}
                            </div>
                            <div v-if="Array.isArray(dato.data[tag])">
                                <span v-for="(tagContent,index) in dato.data[tag]" :key="index">- {{tagContent}}<br v-if="index<dato.data[tag].length-1"></span>
                                <span v-if="dato.data[tag].length==0">No tiene</span>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    props:['dato','tags'],
    computed:
    {
        pantallaGrande()
        {
            return this.$mq=='lg' || this.$mq=='xl'
        }
    },
    methods: {
        tagName(tag)
        {
            if(tag=='imgAlt')
            {
                return 'Alt de imágenes'
            }
            if(tag=='path')
            {
                return 'Path de URL'
            }
            return tag
        },
    },
}
</script>
<style scoped>
.bg-gris{
    background: #eee;
}
.width-tag
{
    font-weight: bold;
    width:12rem !important;
    max-width:12rem !important;
    min-width:12rem !important;
}
.max-width-url
{
    width:20rem !important;
    min-width:20rem !important;
    max-width:20rem !important;
    overflow-wrap:break-word;
    word-wrap: break-word;
}
.break-word{
    overflow-wrap:break-word;
    word-wrap: break-word;
}
tr td{
    padding:0.5rem;
}
.badge-gris{
    background: #e0e0e0;
    padding: 0.15rem;
    border-radius:0.15rem;
}
a{
    overflow-wrap:break-word !important;
    word-wrap: break-word;
}
table {
    table-layout: fixed;
}

</style>
