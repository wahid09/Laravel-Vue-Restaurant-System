<template>
  <div class="component-wrapper">
    <div class="row">
      <div class="col-md-8">
        <card-component>
          <template slot="title">My Menu List</template>
          <template slot="body">
            <div class="section">
              <multiselect v-model="menu" :options="categories"></multiselect>
            </div>
            <itemGroup :items = "currentMenuItems"></itemGroup>
          </template>
        </card-component>
      </div>
      <div class="col-md-4">
        <card-component>
          <template slot="title">Add Menu</template>
          <template slot="body"></template>
        </card-component>
      </div>
    </div>
  </div>
</template>

<script>
import _ from 'lodash';
import Multiselect from 'vue-multiselect';
import itemGroup from './itemGroup.vue'
  export default {
    props: ['items'],
    components: {
      Multiselect, itemGroup
    },
    data(){
      return{
        menu: '',
        categories:[]
      }
    },
    created(){
      _.forEach(this.items, (item, key)=>{
        this.categories.push(key);
      } );
      this.menu = this.categories[0];
    },
    computed:{
      currentMenuItems(){
        return this.items[this.menu];
      }
    }
  }
</script>

<style>
</style>
