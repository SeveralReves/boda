<template>
    <div>
      <h1>¡Hola desde un componente de Vue 3!</h1>
      <p>{{ mensaje }}</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        mensaje: 'Este es un componente en Vue 3 integrado con Laravel 10',
      };
    },
  };
  </script>
  
  <style scoped>
  h1 {
    color: #42b983;
  }
  </style>
  