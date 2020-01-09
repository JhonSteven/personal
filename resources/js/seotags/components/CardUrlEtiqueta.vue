<template>
    <div class="mb-4">
        <table-etiqueta :show="show" @showIndex="showIndex" v-for="(tag,index) in tags" :key="index" :resultados="resultados" :tag="tag" :loading="loading"></table-etiqueta>
    </div>
</template>
<script>
import TableEtiqueta from './TableEtiqueta';

export default {
    components:{TableEtiqueta},
    props:['resultados','loading','tags'],
    data()
    {
        return {
            show: '',
        }
    },
    methods:{
        showIndex(index)
        {
            this.show = (this.show==index) ? '' : index
        }
    },
    mounted() {
        this.show = this.tags[0]
    },
}
</script>
