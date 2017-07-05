<?php

namespace Corcel;

/**
 * Class CommentMeta
 *
 * @package Corcel
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class CommentMeta extends PostMeta
{
    /**
     * @var string
     */
    protected $table = 'commentmeta';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}