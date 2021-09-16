<template>
    <div class="container">
        <table>
            <tr>
                <td>ポケモン</td>
                <td>
                    <input type="hidden" name="pokemon_id" v-bind:value="pokemonId">
                    <input type="text" name="pokemon" v-bind:value="pokemonName" v-on:input="editPokemonTable">
                </td>
            </tr>
            <tr v-for="list in pokemonList" :key="list.id">
                <td></td>
                <td v-bind:value="list.id" v-on:click="choosePokemon(list.id, list.name)" v-text="list.name"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>わざ1</td>
                <td>
                    <input type="hidden" name="pokemon_move_1_id" v-bind:value="pokemonMove1Id">
                    <input type="text" name="pokemon_move_1" v-bind:value="pokemonMove1Name" v-on:input="editPokemonMove1Table">
                </td>
            </tr>
            <tr v-for="move1List in pokemonMove1List" :key="move1List.id">
                <td></td>
                <td v-bind:value="move1List.id" v-on:click="choosePokemonMove1(move1List.id, move1List.name)" v-text="move1List.name"></td>
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
                pokemonMove1Id: '',
                pokemonMove1Name: '',
                pokemonMove1List: [],
            }
        },
        props: {
            pokemon: {
                type:Array,
                required:true,
            },
            pokemon_moves: {
                type:Array,
                required:true,
            },
        },
        mounted() {
            console.log(this.pokemon);
            console.log(this.pokemon_moves);
        },
        methods: {
            editPokemonTable: function(e) {
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
                console.log(this.pokemonList);
            },
            choosePokemon: function(pokemonId, pokemonName) {
                console.log(`selected id : ${pokemonId}`);
                this.pokemonName = pokemonName;
                this.pokemonId = pokemonId;
                this.pokemonList = [];
            },
            editPokemonMove1Table: function(e) {
                this.pokemonMove1Name = e.target.value;
                this.pokemonMove1List = [];
                if (this.pokemonMove1Name === '') {
                    return;
                }

                let i = 0;
                this.pokemon_moves.forEach(element => {
                    if (element.move_name.indexOf(this.pokemonMove1Name) > -1) {
                        this.pokemonMove1List[i] = {
                            id : element.id,
                            name : element.move_name,
                        }
                        i = i + 1;
                    }
                });

                console.log(this.pokemonMove1List);
            },
            choosePokemonMove1: function(move1Id, move1Name) {
                console.log(`selected id : ${move1Id}`);
                this.pokemonMove1Name = move1Name;
                this.pokemonMove1Id = move1Id;
                this.pokemonMove1List = [];
            },
        }
    }
</script>
