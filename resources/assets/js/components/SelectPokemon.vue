<template>
    <div class="container">
        <table>
            <tr>
                <td>ポケモン</td>
                <td>
                    <input type="hidden" name="pokemon_id" v-bind:value="pokemonId">
                    <input type="text" name="pokemon" v-bind:value="pokemonName" v-on:input="editTable">
                </td>
            </tr>
            <tr v-for="list in pokemonList" :key="list.id">
                <td></td>
                <td v-bind:value="list.id" v-on:click="choosePokemon(list.id, list.name)" v-text="list.name"></td>
            </tr>
        </table>
    </div>
</template>

<script>
    export default {
        data:function() {
            return {
                pokemonId: '',
                pokemonName: '',
                pokemonList: [],
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
            editTable: function(e) {
                this.pokemonName = e.target.value;
                this.pokemonList = [];
                if (this.pokemonName === '') {
                    return;
                }

                let i = 0;
                this.pokemon.forEach(element => {
                    if (element.pokemon_name.indexOf(this.pokemonName) > -1 ) {
                        this.pokemonList[i] = {
                            id : element.id,
                            name : element.pokemon_name,
                        }
                        i = i + 1;
                    }
                });
            },
            choosePokemon: function(pokemonId, pokemonName) {
                console.log(`selected id : ${pokemonId}`);
                this.pokemonName = pokemonName;
                this.pokemonId = pokemonId;
                this.pokemonList = [];
            },
        }
    }
</script>
