Vue.component('full-frame', require('./FullFrame.vue'));

var con = new Vue({
      el: '#full-frame',
      props : ['user'],
});
