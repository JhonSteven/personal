<template>
<div class="card mb-4">
    <div class="card-body">
        <h2 class="text-success bold">TITLE</h2>
        <hr>
        <div class="pb-2">
            <div v-for="(dato,key) in resultados.data" :key="key">
                <span class="badge badge-warning">#{{key+1}} </span>
                <span v-if="dato.data['title']">{{dato.data['title']}} </span>
                <i v-if="!dato.data['title']">NO TIENE - </i>
                <a :href="dato.url" target="_blank" class="text-primary">({{dato.url}})</a><br v-if="key<resultados.data.length-1">
            </div>
            <div v-if="loading" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
            <div v-if="!loading && resultados.data.length==0">Información no encontrada.</div>
        </div>
    </div>
    <div class="card-body">
        <h2 class="text-success bold">DESCRIPTION</h2>
        <hr>
        <div class="pb-2">
            <div v-for="(dato,key) in resultados.data" :key="key">
                <span class="badge badge-warning">#{{key+1}} </span>
                <span v-if="dato.data['description']">{{dato.data['description']}} </span>
                <i v-if="!dato.data['description']">NO TIENE - </i>
                <a :href="dato.url" target="_blank" class="text-primary">({{dato.url}})</a><br v-if="key<resultados.data.length-1">
            </div>
            <div v-if="loading" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
            <div v-if="!loading && resultados.data.length==0">Información no encontrada.</div>
        </div>
    </div>
    <div class="card-body">
        <h2 class="text-success bold">KEYWORDS</h2>
        <hr>
        <div class="pb-2">
            <div v-for="(dato,key) in resultados.data" :key="key">
                <span class="badge badge-warning">#{{key+1}} </span>
                <span v-if="dato.data['keywords']">{{dato.data['keywords']}} </span>
                <i v-if="!dato.data['keywords']">NO TIENE - </i>
                <a :href="dato.url" target="_blank" class="text-primary">({{dato.url}})</a><br v-if="key<resultados.data.length-1">
            </div>
            <div v-if="loading" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
            <div v-if="!loading && resultados.data.length==0">Información no encontrada.</div>
        </div>
    </div>
    <div class="card-body">
        <h2 class="text-success bold">H1</h2>
        <hr>
        <div class="pb-2">
            <div v-for="(dato,key) in resultados.data" :key="key">
                <span class="badge badge-warning">#{{key+1}} </span>
                <a :href="dato.url" target="_blank" class="text-primary">({{dato.url}})</a><br>
                <span v-for="(h1tag,index) in dato.data['h1']" :key="index">- {{h1tag}}<br v-if="index<dato.data['h1'].length-1"></span>
                <i v-if="dato.data['h1'].length==0">NO TIENE</i>
            </div>
            <div v-if="loading" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
            <div v-if="!loading && resultados.data.length==0">Información no encontrada.</div>
        </div>
    </div>
    <div class="card-body">
        <h2 class="text-success bold">H2</h2>
        <hr>
        <div class="pb-2">
            <div v-for="(dato,key) in resultados.data" :key="key">
                <span class="badge badge-warning">#{{key+1}} </span>
                <a :href="dato.url" target="_blank" class="text-primary">({{dato.url}})</a><br>
                <span v-for="(h2tag,index) in dato.data['h2']" :key="index">- {{h2tag}}<br v-if="index<dato.data['h2'].length-1"></span>
                <i v-if="dato.data['h2'].length==0">NO TIENE</i>
            </div>
            <div v-if="loading" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
            <div v-if="!loading && resultados.data.length==0">Información no encontrada.</div>
        </div>
    </div>
    <div class="card-body">
        <h2 class="text-success bold">H3</h2>
        <hr>
        <div class="pb-2">
            <div v-for="(dato,key) in resultados.data" :key="key">
                <span class="badge badge-warning">#{{key+1}} </span>
                <a :href="dato.url" target="_blank" class="text-primary">({{dato.url}})</a><br>
                <span v-for="(h3tag,index) in dato.data['h3']" :key="index">- {{h3tag}}<br v-if="index<dato.data['h3'].length-1"></span>
                <i v-if="dato.data['h3'].length==0">NO TIENE</i>
            </div>
            <div v-if="loading" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
            <div v-if="!loading && resultados.data.length==0">Información no encontrada.</div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    props:['resultados','loading']
}
</script>
