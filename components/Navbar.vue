<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">CV Builder</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/feedback" tabindex="-1">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact" tabindex="-1">Contact</a>
          </li>
        </ul>

        <b-button
          variant="outline-primary"
          id="buildCVbtn"
          @click="$bvModal.show('bv-modal-example')"
          >Create CV</b-button
        >
        <b-button class="mx-2" variant="primary" @click="printCVData()">
          Save Curriculum
        </b-button>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },

  methods: {
    printCVData() {
      window.print();
    },
  },
  mounted() {
    //this.printDataCV();
  },
};

const $ = require("jquery");
// Lo declaramos globalmente
window.$ = $;
</script>
