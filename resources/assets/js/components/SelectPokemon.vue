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
                    <input type="hidden" name="move_1_id" v-bind:value="move1Id">
                    <input type="text" name="move_1" v-bind:value="move1Name" v-on:input="editMove1Table">
                </td>
            </tr>
            <tr v-for="move1 in move1List" :key="move1.id">
                <td></td>
                <td v-bind:value="move1.id" v-on:click="chooseMove1(move1.id, move1.name)" v-text="move1.name"></td>
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
                move1Id: '',
                move1Name: '',
                move1List: [],
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
            editMove1Table: function(e) {
                this.move1Name = e.target.value;
                this.move1List = [];
                if (this.move1Name === '') {
                    return;
                }

                let i = 0;
                this.pokemon_moves.forEach(element => {
                    if (element.move_name.indexOf(this.move1Name) > -1) {
                        this.move1List[i] = {
                            id : element.id,
                            name : element.move_name,
                        }
                        i = i + 1;
                    }
                });

                console.log(this.move1List);
            },
            chooseMove1: function(move1Id, move1Name) {
                console.log(`selected id : ${move1Id}`);
                this.move1Name = move1Name;
                this.move1Id = move1Id;
                this.move1List = [];
            },
        }
    }
</script>
