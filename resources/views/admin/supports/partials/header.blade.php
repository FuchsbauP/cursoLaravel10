<div>
    <div class="mb-4 mt-4 flex-col items-center justify-between gap-x-6">
        <div class="flex items-center justify-center gap-x-2">
            <h1 class="text-lg font-semibold leading-6 text-gray-900">Forum</h1>
            <span class="rounded-full bg-gray-200 px-3 py-1 text-xs text-gray-800">{{ $total }} dúvidas</span>
        </div>
        <div class="mt-4 flex items-center justify-center gap-x-3">
            <a href="{{ route('supports.create') }}"
                class="flex w-1/2 items-center justify-center rounded-md bg-slate-600 px-5 py-2 text-sm font-normal text-white hover:bg-slate-700 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-slate-500">
                Nova Dúvida
            </a>
        </div>
        <div>
            <form action="" method="get">
                <div class="mt-4 flex items-center justify-center gap-x-3">
                    <input type="text" name="filter" placeholder="Pesquisar dúvidas..."
                        value="{{ $filters['filter'] ?? '' }}"
                        class="block w-1/2 rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6" />
                </div>
            </form>
        </div>
    </div>
</div>
