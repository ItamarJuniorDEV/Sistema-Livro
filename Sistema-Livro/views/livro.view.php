<div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">Imagem</div>
        <div class="space-y-1">
            <?php if (isset($livro['id'])): ?>
                <a href="livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?? 'Título não disponível' ?></a>
            <?php endif; ?>
            <div class="text-xs italic"><i> <?= $livro['autor'] ?? 'Autor não disponível' ?></i></div>
            <div class="text-xs italic">⭐️⭐️⭐️⭐️⭐️ (3 Avaliações)</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $livro['descricao'] ?? 'Descrição não disponível' ?>
    </div>
</div>
