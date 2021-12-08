<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Song Model
 *
 * @property \App\Model\Table\SingerTable&\Cake\ORM\Association\BelongsTo $Singer
 * @property \App\Model\Table\GenreTable&\Cake\ORM\Association\BelongsTo $Genre
 * @property \App\Model\Table\AlbumTable&\Cake\ORM\Association\BelongsToMany $Album
 * @property \App\Model\Table\AuthorTable&\Cake\ORM\Association\BelongsToMany $Author
 * @property \App\Model\Table\MediaTable&\Cake\ORM\Association\BelongsToMany $Media
 *
 * @method \App\Model\Entity\Song newEmptyEntity()
 * @method \App\Model\Entity\Song newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Song[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Song get($primaryKey, $options = [])
 * @method \App\Model\Entity\Song findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Song patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Song[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Song|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SongTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('song');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Singer', [
            'foreignKey' => 'singer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Genre', [
            'foreignKey' => 'genre_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Album', [
            'foreignKey' => 'song_id',
            'targetForeignKey' => 'album_id',
            'joinTable' => 'album_song',
        ]);
        $this->belongsToMany('Author', [
            'foreignKey' => 'song_id',
            'targetForeignKey' => 'author_id',
            'joinTable' => 'author_song',
        ]);
        $this->belongsToMany('Media', [
            'foreignKey' => 'song_id',
            'targetForeignKey' => 'media_id',
            'joinTable' => 'media_song',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('length')
            ->maxLength('length', 255)
            ->requirePresence('length', 'create')
            ->notEmptyString('length');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('singer_id', 'Singer'), ['errorField' => 'singer_id']);
        $rules->add($rules->existsIn('genre_id', 'Genre'), ['errorField' => 'genre_id']);

        return $rules;
    }
}
