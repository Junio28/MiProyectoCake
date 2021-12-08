<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Song Controller
 *
 * @property \App\Model\Table\SongTable $Song
 * @method \App\Model\Entity\Song[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SongController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Singer', 'Genre'],
        ];
        $song = $this->paginate($this->Song);

        $this->set(compact('song'));
    }

    /**
     * View method
     *
     * @param string|null $id Song id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $song = $this->Song->get($id, [
            'contain' => ['Singer', 'Genre', 'Album', 'Author', 'Media'],
        ]);

        $this->set(compact('song'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $song = $this->Song->newEmptyEntity();
        if ($this->request->is('post')) {
            $song = $this->Song->patchEntity($song, $this->request->getData());
            if ($this->Song->save($song)) {
                $this->Flash->success(__('The song has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The song could not be saved. Please, try again.'));
        }
        $singer = $this->Song->Singer->find('list', ['limit' => 200])->all();
        $genre = $this->Song->Genre->find('list', ['limit' => 200])->all();
        $album = $this->Song->Album->find('list', ['limit' => 200])->all();
        $author = $this->Song->Author->find('list', ['limit' => 200])->all();
        $media = $this->Song->Media->find('list', ['limit' => 200])->all();
        $this->set(compact('song', 'singer', 'genre', 'album', 'author', 'media'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Song id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $song = $this->Song->get($id, [
            'contain' => ['Album', 'Author', 'Media'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $song = $this->Song->patchEntity($song, $this->request->getData());
            if ($this->Song->save($song)) {
                $this->Flash->success(__('The song has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The song could not be saved. Please, try again.'));
        }
        $singer = $this->Song->Singer->find('list', ['limit' => 200])->all();
        $genre = $this->Song->Genre->find('list', ['limit' => 200])->all();
        $album = $this->Song->Album->find('list', ['limit' => 200])->all();
        $author = $this->Song->Author->find('list', ['limit' => 200])->all();
        $media = $this->Song->Media->find('list', ['limit' => 200])->all();
        $this->set(compact('song', 'singer', 'genre', 'album', 'author', 'media'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Song id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $song = $this->Song->get($id);
        if ($this->Song->delete($song)) {
            $this->Flash->success(__('The song has been deleted.'));
        } else {
            $this->Flash->error(__('The song could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
