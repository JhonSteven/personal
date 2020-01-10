<template>
    <div class="">
        <h2 class="text-success bold my-0" :class="loading ? '' : 'pointer'" @click="loading ? null : $emit('showIndex',tag)">{{tagName  | uppercase}} <i v-if="!loading" class="fa float-right" :class="show==tag ? 'fa-minus' : 'fa-plus'"></i></h2>
        <hr>
        <div class="pb-2 table-responsive animated fadeInDown" v-show="show==tag || loading">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="width-id">#</th>
                        <th>{{tag | uppercase}}</th>
                        <th class="max-width-url" v-if="pantallaGrande">URL</th>
                    </tr>
                </thead>
                <tbody>
                    <template v-for="(dato,key) in resultados.data">
                        <tr :key="key" :class="{'bg-gris':key % 2}">
                            <td class="width-id"><span class="badge badge-warning">#{{key+1}} </span></td>
                            <td>
                                <div  v-if="!Array.isArray(dato.data[tag])">
                                    <span v-if="dato.data[tag]">{{dato.data[tag]}} </span>
                                    <i v-if="!dato.data[tag]">NO TIENE</i>
                                </div>
                                <div v-if="Array.isArray(dato.data[tag])">
                                    <span v-for="(tagContent,index) in dato.data[tag]" :key="index">- {{tagContent}}<br v-if="index<dato.data[tag].length-1"></span>
                                    <i v-if="dato.data[tag].length==0">NO TIENE</i>
                                </div>
                                <div v-if="!pantallaGrande" class="break-word"><a :href="decodeURIComponent(dato.url)" target="_blank" class="text-primary">{{decodeURIComponent(dato.url)}}</a><br v-if="key<resultados.data.length-1"></div>
                            </td>
                            <td class="max-width-url" v-if="pantallaGrande">
                                <a :href="decodeURIComponent(dato.url)" target="_blank" class="text-primary">{{decodeURIComponent(dato.url)}}</a><br v-if="key<resultados.data.length-1">
                            </td>
                        </tr>
                    </template>
                    <tr v-if="loading || (!loading && resultados.data.length==0)">
                        <td :colspan="$mq=='lg' || $mq=='xl' ? 3 : 2">
                            <div v-if="loading" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
                            <div v-if="!loading && resultados.data.length==0">Información no encontrada.</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    props:['loading','resultados','tag','show'],
    computed:{
        tagName()
        {
            if(this.tag=='imgAlt')
            {
                return 'Alt de imágenes'
            }
            if(this.tag=='path')
            {
                return 'Path de URL'
            }
            return this.tag
        },
        pantallaGrande()
        {
            return this.$mq=='lg' || this.$mq=='xl'
        }
    }
}
</script>
<style scoped>
.bg-gris{
    background: #eee;
}
.width-id
{
    width:2.5rem !important;
    max-width:2.5rem !important;
    min-width:2.5rem !important;
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
