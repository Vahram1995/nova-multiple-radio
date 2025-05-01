<template>
  <div>
    <input type="text" v-model="value" :name="field.name" />
  </div>
</template>

<script>
export default {
  props: ['resourceName', 'resourceId', 'field'],
  data() {
    return {
      value: this.field.value || ''
    }
  },
  watch: {
    value(newValue) {
      // Emit the new value when it changes
      this.$emit('input', newValue)
    }
  }
}
</script>
