  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="{{ $v('js/script.js') }}"></script>
  <!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // animation duration
    once: true,     // animation on scroll only once
    // honour the OS "reduce motion" setting instead of animating regardless
    disable: function () {
      return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    },
  });

  // rotating the phone changes every element's position — recalculate,
  // otherwise elements that were queued to animate stay invisible
  window.addEventListener('orientationchange', function () {
    setTimeout(function () { AOS.refresh(); }, 300);
  });
</script>
 @if(session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 2000
      });
  </script>
  @endif