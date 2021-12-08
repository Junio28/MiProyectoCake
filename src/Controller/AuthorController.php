<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Author Controller
 *
 * @property \App\Model\Table\AuthorTable $Author
 * @method \App\Model\Entity\Author[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $author = $this->paginate($this->Author);

        $this->set(compact('author'));
    }

    /**
     * View method
     *
     * @param string|null $id Author id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $author = $this->Author->get($id, [
            'contain' => ['Song'],
        ]);

        $this->set(compact('author'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $author = $this->Author->newEmptyEntity();
        if ($this->request->is('post')) {
            $author = $this->Author->patchEntity($author, $this->request->getData());
            if ($this->Author->save($author)) {
                $this->Flash->success(__('The author has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The author could not be saved. Please, try again.'));
        }
        $song = $this->Author->Song->find('list', ['limit' => 200])->all();
        $this->set(compact('author', 'song'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Author id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $author = $this->Author->get($id, [
            'contain' => ['Song'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $author = $this->Author->patchEntity($author, $this->request->getData());
            if ($this->Author->save($author)) {
                $this->Flash->success(__('The author has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The author could not be saved. Please, try again.'));
        }
        $song = $this->Author->Song->find('list', ['limit' => 200])->all();
        $this->set(compact('author', 'song'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Author id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $author = $this->Author->get($id);
        if ($this->Author->delete($author)) {
            $this->Flash->success(__('The author has been deleted.'));
        } else {
            $this->Flash->error(__('The author could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
