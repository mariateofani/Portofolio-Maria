<section id="contact" class="relative py-32 bg-slate-900 flex items-center justify-center min-h-screen">

    <div class="max-w-2xl w-full mx-auto px-6 lg:px-10 flex flex-col items-center">

        <!-- HEADER SECTION -->
        <div class="text-center mb-12">

            <p class="uppercase tracking-[6px] text-violet-400 mb-3 text-sm font-semibold">
                Contact
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-white">
                Let's Work Together
            </h2>

            <p class="mt-4 text-slate-400">
                Punya ide proyek atau sekadar ingin menyapa? Kirim pesanmu di bawah.
            </p>

        </div>

        <!-- FORM SECTION -->
        <form action="https://formspree.io/f/xeeyvlqq" method="POST" class="w-full space-y-6 flex flex-col items-center">

            <input
                type="text"
                name="name"
                placeholder="Your Name"
                class="w-full rounded-2xl bg-slate-800/80 border border-white/10 p-4 text-white placeholder-slate-500 outline-none focus:border-violet-500 focus:ring-1 focus:ring-violet-500 transition">

            <input
                type="email"
                name="email"
                placeholder="Email"
                class="w-full rounded-2xl bg-slate-800/80 border border-white/10 p-4 text-white placeholder-slate-500 outline-none focus:border-violet-500 focus:ring-1 focus:ring-violet-500 transition">

            <input
                type="text"
                name="subject"
                placeholder="Subject"
                class="w-full rounded-2xl bg-slate-800/80 border border-white/10 p-4 text-white placeholder-slate-500 outline-none focus:border-violet-500 focus:ring-1 focus:ring-violet-500 transition">

            <textarea
                name="message"
                rows="6"
                placeholder="Message"
                class="w-full rounded-2xl bg-slate-800/80 border border-white/10 p-4 text-white placeholder-slate-500 outline-none focus:border-violet-500 focus:ring-1 focus:ring-violet-500 transition resize-none"></textarea>

            <!-- Tombol Kirim Ketengah -->
            <button
                type="submit"
                class="w-full sm:w-auto rounded-full bg-violet-600 hover:bg-violet-500 text-white px-10 py-4 font-semibold shadow-lg shadow-violet-600/30 transition duration-300">

                Send Message

            </button>

        </form>

    </div>

</section>