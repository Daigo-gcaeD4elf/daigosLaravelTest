<template>
    <div class="container">
        <input type="hidden" name="pokemon_id" value="pokemonId">
        ポケモン<input type="text" name="pokemon" v-bind:value="foo" v-on:input="editTable">
        <div v-if="toggleTable">
            <table v-html="list"></table>
        </div>
    </div>
</template>

<script>
    export default {
        data:function() {
            return {
                pokemonId: '',
                toggleTable:true,
                list: '',
                foo: '',
            }
        },
        props: {
            pokemon: {
                type:Array,
                required:true,
            },
        },
        mounted() {
            console.log(this.pokemon);
        },
        methods: {
            switchTable: function() {
                this.toggleTable = !this.toggleTable;
            },
            editTable: function(e) {
                this.foo = e.target.value;
                if (this.foo === '') {
                    this.list = '';
                    return;
                }

                let tableTag = '';
                this.pokemon.forEach(element => {
                    if (element.pokemon_name.indexOf(this.foo) > -1 ) {
                        tableTag += `<tr><td v-bind:value="${element.id}" v-on:click="choosePokemon">${element.pokemon_name}</td></tr>`
                    }
                });
                this.list = tableTag;
            },
            choosePokemon: function() {
                console.log('pokemonを選んだ！！');
            },
        }
    }
</script>
