<template>
    <div>
        <div class="pb-2">
            <h3>TITLE</h3>
            {{dato.data['title'] || 'No tiene title.'}}
        </div>
        <div class="pb-2">
            <h3>DESCRIPTION</h3>
            {{dato.data['description'] || 'No tiene description.'}}
        </div>
        <div class="pb-2">
            <h3>KEYWORDS</h3>
            {{dato.data['keywords'] || 'No tiene keywords.'}}
        </div>
        <div class="pb-2">
            <h3>H1</h3>
            <div>
                <div v-if="dato.data['h1']">
                    <span v-for="(h1tag,index) in dato.data['h1']" :key="index">- {{h1tag}}<br v-if="index<dato.data['h1'].length-1"></span>
                </div>
                <span v-else>No tiene h1</span>
            </div>
        </div>
        <div class="pb-2">
            <h3>H2</h3>
            <div v-if="dato.data['h2']">
                <span v-for="(h2tag,index) in dato.data['h2']" :key="index">- {{h2tag}}<br v-if="index<dato.data['h2'].length-1"></span>
            </div>
            <span v-else>No tiene h2</span>
        </div>
        <div class="pb-2">
            <h3>H3</h3>
            <div v-if="dato.data['h3']">
                <span v-for="(h3tag,index) in dato.data['h3']" :key="index">- {{h3tag}}<br v-if="index<dato.data['h3'].length-1"></span>
            </div>
            <span v-else>No tiene h3</span>
        </div>
        <div class="pb-2">
            <h3>ALT DE IMÁGENES</h3>
            <div v-if="dato.data['imgAlt']">
                <span v-for="(imgAlttag,index) in dato.data['imgAlt']" :key="index">- {{imgAlttag}}<br v-if="index<dato.data['imgAlt'].length-1"></span>
            </div>
            <span v-else>No tiene imágenes con alt</span>
        </div>
    </div>
</template>
<script>
export default {
    props:['dato']
}
</script>
