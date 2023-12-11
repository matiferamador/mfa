
document.addEventListener("DOMContentLoaded", function () {
  // Verifica si el elemento con la clase .mySwiper existe
  if (document.querySelector('.mySwiper')) {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }
});


document.querySelector('.enlace-img')

{/* <div data-popover id="popover-image" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-96 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
    <div class="grid grid-cols-5">
        <div class="col-span-3 p-3">
            <div class="space-y-2">
                <h3 class="font-semibold text-gray-900 dark:text-white">About Italy</h3>
                <p>Italy is located in the middle of the Mediterranean Sea, in Southern Europe it is also considered part of Western Europe. A unitary parliamentary republic with Rome as its capital and largest city.</p>
                <a href="#" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
  </svg></a>
            </div>
        </div>
        <img src="/docs/images/popovers/italy.png" class="h-full col-span-2" alt="Italy map" />
    </div>
    <div data-popper-arrow></div>
</div> */}