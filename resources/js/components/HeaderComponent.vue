<template>
    <div>
      <h2>¡Hola desde el componente Header en Vue!</h2>
      <p>Este componente está siendo llamado desde el archivo Blade del header.</p>
    </div>
  </template>
  
  <script>
  export default {
    name: 'HeaderComponent',
  };
  </script>
  
  <style scoped>
  h2 {
    color: #ff5733;
  }
  </style>
  