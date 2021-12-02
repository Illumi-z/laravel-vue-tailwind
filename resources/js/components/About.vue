<template>

  <div class="mt-8">
    <p>About Page</p>
  </div>

</template>

<script>
export default {
  computed: {
    project() {
      return this.$store.state.project
    }
  }
}
</script>

<style>

</style>