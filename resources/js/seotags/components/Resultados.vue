<template>
    <div class="container" v-if="resultados.country">
        <div class="text-center py-4">
            <h2 class="my-0">{{loading ? 'Buscando el término ' : 'Resultados encontrados de'}} <b>{{resultados.termino}}</b> en <b>{{countrySelected}}</b> {{loading ? '...' : ''}}</h2>
        </div>
        <div class="row pt-2 pb-4" v-if="resultados.data.length>0">
            <div class="col-6 pl-0">
                <b-button @click="tipo='etiqueta-seo'" block class="btn bold" :variant="tipo=='etiqueta-seo' ? 'success' : 'outline-success'">POR ETIQUETA SEO</b-button>
            </div>
            <div class="col-6 pr-0">
                <b-button @click="tipo='serp'" block class="btn bold" :variant="tipo=='serp' ? 'success' : 'outline-success'">POR SERP ENCONTRADA</b-button>
            </div>
        </div>
        <template v-if="tipo=='serp'">
            <div class="card mb-4" v-for="(url,key) in urls" :key="key">
                <div class="card-body">
                    <h2 class="text-success bold"><span class="badge badge-warning">#{{key+1}}</span> <a :href="url" target="_blank">{{url}}</a><br><small class="time" v-if="resultados.data.some(d => d.url==url)">{{parseFloat(resultados.data.find(d => d.url==url).time).toFixed(3)}} segundos</small></h2>
                    <hr>
                    <card-url-serp :dato="resultados.data.find(d => d.url==url)" v-if="resultados.data.some(d => d.url==url)"></card-url-serp>
                    <div v-if="loading && !resultados.data.some(d => d.url==url)" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
                    <div v-if="!loading && !resultados.data.some(d => d.url==url)">Información no he encontrada.</div>
                </div>
            </div>
        </template>
        <template v-if="tipo=='etiqueta-seo'">
            <card-url-etiqueta :loading="loading" :resultados="resultados"></card-url-etiqueta>
        </template>
    </div>
</template>
<script>
import CardUrlSerp from './CardUrlSerp';
import CardUrlEtiqueta from './CardUrlEtiqueta';

export default {
    components:{CardUrlSerp,CardUrlEtiqueta},
    props:['resultados','loading','urls'],
    data()
    {
        return {
            tipo:'etiqueta-seo'
        }
    },
    computed: {
        countrySelected()
        {
            var elemento = document.getElementById('selectCountry');
            return elemento.options.namedItem('select-'+this.resultados.country).text
        }
    },
}
</script>
<style>
.time
{
    font-size: 1rem;
    font-weight: bold;
}
</style>
