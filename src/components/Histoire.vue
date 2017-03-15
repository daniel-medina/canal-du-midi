<template>
  <div>
        <div class="col-lg-12 block background">
            Pas mal omg
        </div>
  </div>
</template>
<script>
export default {
  name: 'index',
}
</script>

<style lang="scss" scoped>

  /** Importing variables file */
  @import '../sass/variables.scss';

.background {
      background: $background-histoire no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: bottom;
      height: 600px;
}

</style>
