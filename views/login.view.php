<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-yellow-100 font-bold px-4 py-2 text-red-400">Login</h1>
        <form class="p-4 space-y-4">
            <div class="flex flex-col">
                <label style="color:#febf97" class="mb-1">Email</label>
                <input type="email" name="email" required style="background-color: #f5ecb7;"
                    class="rounded-md border-yellow-100 border-2 focus:outline-none px-2 py-1 text-zinc-950 border-2">
            </div>
            <div class="flex flex-col">
                <label style="color:#febf97" class="mb-1">Senha</label>
                <input type="password" name="password" required style="background-color: #f5ecb7;"
                    class="rounded-md border-yellow-100 border-2 focus:outline-none px-2 py-1 text-zinc-950 border-2">
            </div>
            <button type="submit" class="px-4 py-1 rounded-md border-2 bg-red-400 hover:bg-red-300"
                style="color:#23192d; border-color:#febf97">Logar</button>
        </form>
    </div>
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-yellow-100 font-bold px-4 py-2 text-red-400">Registro</h1>
        <form class="p-4 space-y-4">
            <div class="flex flex-col">
                <label style="color:#febf97" class="mb-1">Nome</label>
                <input type="text" name="nome" required style="background-color: #f5ecb7;"
                    class="rounded-md border-yellow-100 border-2 focus:outline-none px-2 py-1 text-zinc-950 border-2">
            </div>
            <div class="flex flex-col">
                <label style="color:#febf97" class="mb-1">Email</label>
                <input type="email" name="email" required style="background-color: #f5ecb7;"
                    class="rounded-md border-yellow-100 border-2 focus:outline-none px-2 py-1 text-zinc-950 border-2">
            </div>
            <div class="flex flex-col">
                <label style="color:#febf97" class="mb-1">Confirme seu email</label>
                <input type="email" name="email_confirmacao" required style="background-color: #f5ecb7;"
                    class="rounded-md border-yellow-100 border-2 focus:outline-none px-2 py-1 text-zinc-950 border-2">
            </div>
            <div class="flex flex-col">
                <label style="color:#febf97" class="mb-1">Senha</label>
                <input type="password" name="password" required style="background-color: #f5ecb7;"
                    class="rounded-md border-yellow-100 border-2 focus:outline-none px-2 py-1 text-zinc-950 border-2">
            </div>
            <button type="reset" class="px-4 py-1 rounded-md border-2 bg-red-400 hover:bg-red-300"
                style="color:#23192d; border-color:#febf97">Cancelar</button>
            <button type="submit" class="px-4 py-1 rounded-md border-2 bg-red-400 hover:bg-red-300"
                style="color:#23192d; border-color:#febf97">Registrar</button>
        </form>
    </div>
</div>