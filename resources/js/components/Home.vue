<template>

  <div class="mt-8">
    <p>Home Page</p>
    <p>{{ project.name }}</p>
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