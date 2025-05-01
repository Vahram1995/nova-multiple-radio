<template>
  <div>
    <input type="color" v-model="value" @input="updateValue($event.target.value)">
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
  methods: {
    updateValue(value) {
      this.value = value;
      this.$emit('input', value);
    }
  }
}
</script>