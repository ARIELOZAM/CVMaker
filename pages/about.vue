<template>
  <div>
    <div class="container mt-5">
      <div class="row mt-5">
        <div class="col-12 mt-5">
          <div class="text-center">
            <h1>{{ tempMessage }}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: "app",
  data() {
    return {
      tempMessage: "This Page isn't Available Now, It is Under Construction",
    };
  },
};
</script>
