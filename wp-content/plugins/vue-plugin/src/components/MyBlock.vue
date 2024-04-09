<template>
    <div class="vue-plugin">
      <h1>Books</h1>
      <ul>
        <li v-for="book in books" :key="book.id">{{ book.title }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        books: []
      }
    },
    async mounted() {
      try {
        const response = await fetch('/wp-json/vue-plugin/v1/books')
        this.books = await response.json()
      } catch (error) {
        console.error('Error fetching books:', error)
      }
    }
  }
  </script>