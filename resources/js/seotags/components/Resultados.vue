<template>
    <div  v-if="resultados.country">
        <div class="container">
            <div class="text-center py-4">
                <h2 class="my-0">{{loading ? 'Buscando el término ' : 'Resultados encontrados de'}} <b>{{resultados.termino}}</b> en <b>{{countrySelected}}</b> {{loading ? '...' : ''}}</h2>
            </div>
            <div class="row pt-2 pb-4" v-if="resultados.data.length>0">
                <div class="col-6">
                    <b-button @click="tipo='etiqueta-seo'" block class="btn bold" :variant="tipo=='etiqueta-seo' ? 'success' : 'outline-success'">POR ETIQUETA SEO</b-button>
                </div>
                <div class="col-6">
                    <b-button @click="tipo='serp'" block class="btn bold" :variant="tipo=='serp' ? 'success' : 'outline-success'">POR SERP ENCONTRADA</b-button>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <template v-if="tipo=='serp'">
                <div class="mb-4" v-for="(url,key) in urls" :key="key">
                    <h2 class="text-success break-word bold pointer" @click="showIndex(key)">
                        <div class="row align-items-center">
                            <div class="col-10 col-md-11">
                                <div class="break-word">
                                    <span class="badge badge-warning mr-1">#{{key+1}}</span> <span class="break-world title-small">{{decodeURIComponent(url)}}</span> <a class="ml-2" :href="url" target="_blank"><i class="fa fa-external-link"></i></a>
                                </div>
                                <div>
                                    <small class="time" v-if="resultados.data.some(d => d.url==url)">{{parseFloat(resultados.data.find(d => d.url==url).time).toFixed(3)}} segundos</small>
                                </div>
                            </div>
                            <div class="col-2 col-md-1 text-right">
                                <i v-if="!loading" class="fa" :class="show==key ? 'fa-minus' : 'fa-plus'"></i>
                            </div>
                        </div>
                    </h2>
                    <hr>
                    <card-url-serp v-show="show==key" :tags="tags" :dato="resultados.data.find(d => d.url==url)" v-if="resultados.data.some(d => d.url==url)"></card-url-serp>
                    <div v-show="show==key" v-if="loading && !resultados.data.some(d => d.url==url)" class="pt-2"><i class="fa fa-spin fa-spinner"></i> Cargando datos ...</div>
                    <div v-show="show==key" v-if="!loading && !resultados.data.some(d => d.url==url)">Información no encontrada.</div>
                </div>
            </template>
            <template v-if="tipo=='etiqueta-seo'">
                <card-url-etiqueta :tags="tags" :loading="loading" :resultados="resultados"></card-url-etiqueta>
            </template>
        </div>
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
            tags:['path','title','description','h1','h2','h3','imgAlt','keywords'],
            tipo:'etiqueta-seo',
            show:0
        }
    },
    computed: {
        countrySelected()
        {
            var elemento = document.getElementById('selectCountry');
            return elemento.options.namedItem('select-'+this.resultados.country).text
        }
    },
    methods:{
        getPathUrl(url)
        {
            return new URL(url).pathname

        },
        showIndex(index)
        {
            this.show = (this.show==index) ? 'a' : index
        }
    }
}
</script>
<style scoped>
h2
{
    font-size:1.5rem;
    margin-bottom:0;
}
.time
{
    font-size: 1rem;
    font-weight: bold;
}
.break-word{
    overflow-wrap:break-word;
    word-wrap: break-word;
}
h2
{
    position: relative;
}
.float-right
{
    position: absolute;
    top:1rem;
    right: 0.5rem;
}
.title-small
{
    font-size: 1.25rem;
    color:#717171;
}
</style>
