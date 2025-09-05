<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('main')?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Messages</h1>
    
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show mt-3">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-envelope me-1"></i>
            Received Messages
        </div>
        <div class="card-body">
            <div class="message-list">
                <?php if (!empty($messages)): ?>
                    <?php foreach ($messages as $message): ?>
                        <div class="message-item">
                            <div class="message-header" data-bs-toggle="collapse" data-bs-target="#message-<?= $message['id'] ?>">
                                <div class="message-sender">
                                    <strong><?= esc($message['name']) ?></strong>
                                    <span class="text-muted"><?= esc($message['email']) ?></span>
                                </div>
                                <div class="message-subject">
                                    <?= esc($message['subject']) ?>
                                </div>
                                <div class="message-date">
                                    <?= date('M j, Y g:i a', strtotime($message['created_at'])) ?>
                                </div>
                                <div class="message-actions">
                                    <form action="<?= base_url('dashboard/messages/delete/'.$message['id']) ?>" method="post" class="d-inline">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="post">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this message?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="collapse message-body" id="message-<?= $message['id'] ?>">
                                <div class="p-3">
                                    <p><?= nl2br(esc($message['message'])) ?></p>
                                    <div class="text-muted small">
                                        Received: <?= date('F j, Y \a\t g:i a', strtotime($message['created_at'])) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-info">No messages found.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection()?>