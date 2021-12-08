<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Genre Controller
 *
 * @property \App\Model\Table\GenreTable $Genre
 * @method \App\Model\Entity\Genre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GenreController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $this->paginate = [
            'limit' => '2',
        ];

        $genre = $this->paginate($this->Genre);

        $this->set(compact('genre'));
    }

    /**
     * View method
     *
     * @param string|null $id Genre id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genre = $this->Genre->get($id, [
            'contain' => ['Song'],
        ]);

        $this->set(compact('genre'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genre = $this->Genre->newEmptyEntity();
        if ($this->request->is('post')) {
            $genre = $this->Genre->patchEntity($genre, $this->request->getData());
            if ($this->Genre->save($genre)) {
                $this->Flash->success(__('The genre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genre could not be saved. Please, try again.'));
        }
        $this->set(compact('genre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Genre id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genre = $this->Genre->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genre = $this->Genre->patchEntity($genre, $this->request->getData());
            if ($this->Genre->save($genre)) {
                $this->Flash->success(__('The genre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genre could not be saved. Please, try again.'));
        }
        $this->set(compact('genre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Genre id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genre = $this->Genre->get($id);
        if ($this->Genre->delete($genre)) {
            $this->Flash->success(__('The genre has been deleted.'));
        } else {
            $this->Flash->error(__('The genre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
