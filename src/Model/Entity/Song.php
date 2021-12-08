<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Song Entity
 *
 * @property int $id
 * @property string $name
 * @property string $length
 * @property int $singer_id
 * @property int $genre_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Singer $singer
 * @property \App\Model\Entity\Genre $genre
 * @property \App\Model\Entity\Album[] $album
 * @property \App\Model\Entity\Author[] $author
 * @property \App\Model\Entity\Media[] $media
 */
class Song extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'length' => true,
        'singer_id' => true,
        'genre_id' => true,
        'created' => true,
        'modified' => true,
        'singer' => true,
        'genre' => true,
        'album' => true,
        'author' => true,
        'media' => true,
    ];
}
