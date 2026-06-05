<footer class="bg-slate-900 text-white pt-16 pb-8 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
        <div class="md:col-span-2">
            <a href="#" class="flex items-center gap-2 text-2xl font-bold tracking-tight mb-4">
                <span class="text-emerald-400">🌴</span>
                <span><?= htmlspecialchars($companyName ?? 'Global Travel Hub') ?></span>
            </a>
            <p class="text-slate-400 leading-relaxed max-w-sm">
                <?= htmlspecialchars($description ?? 'Discover the Magic of Indonesia') ?>
            </p>
        </div>
        <div>
            <h4 class="text-lg font-bold mb-4 text-slate-100">Quick Links</h4>
            <ul class="space-y-2 text-slate-400 font-medium">
                <li><a href="#" class="hover:text-emerald-400 transition-colors">Home</a></li>
                <li><a href="#tours-section" class="hover:text-emerald-400 transition-colors">Tours & Activities</a></li>
                <li><a href="#destinations-section" class="hover:text-emerald-400 transition-colors">Destinations</a></li>
                <li><a href="#why-section" class="hover:text-emerald-400 transition-colors">Why Choose Us</a></li>
            </ul>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-slate-500 text-sm">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($companyName ?? 'Global Travel Hub') ?>. All rights reserved.</p>
        <p>Powered by Nanas.std Native MVC</p>
    </div>
</footer>

</body>
</html>